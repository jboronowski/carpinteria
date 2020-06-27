<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateStockRequest;
use App\Http\Requests\UpdateStockRequest;
use App\Repositories\StockRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Deposito;
use App\Models\Item;
use App\Models\Stock;


class StockController extends AppBaseController
{
    /** @var  StockRepository */
    private $stockRepository;

    public function __construct(StockRepository $stockRepo)
    {
        $this->stockRepository = $stockRepo;
    }

    /**
     * Display a listing of the Stock.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->stockRepository->pushCriteria(new RequestCriteria($request));
        $stocks = $this->stockRepository->all();
        
        return view('stocks.index',compact('stocks'));
    }

    /**
     * Show the form for creating a new Stock.
     *
     * @return Response
     */
    public function create()
    {
        $items = Item::pluck('item_nombre','id');
        $depositos = Deposito::pluck('descripcion','id','item_nombre','id');
        return view('stocks.create',compact(
            'depositos','items'));   
    }

    /**
     * Store a newly created Stock in storage.
     *
     * @param CreateStockRequest $request
     *
     * @return Response
     */
    public function store(CreateStockRequest $request)
    {
        $input = $request->all();

        $stock = $this->stockRepository->create($input);

        Flash::success('Stock saved successfully.');

        return redirect(route('stocks.index'));
    }

    /**
     * Display the specified Stock.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $stock = $this->stockRepository->findWithoutFail($id);

        if (empty($stock)) {
            Flash::error('Stock not found');

            return redirect(route('stocks.index'));
        }

        return view('stocks.show')->with('stock', $stock);
    }

    /**
     * Show the form for editing the specified Stock.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $stock = $this->stockRepository->findWithoutFail($id);
         $depositos = Deposito::pluck('descripcion','id');
          $items = Item::pluck('item_nombre','id');
        if (empty($stock)) {
            Flash::error('Stock not found');

            return redirect(route('stocks.index'));
        }

        return view('stocks.edit', compact('stock', 'depositos','items'));
    }

    /**
     * Update the specified Stock in storage.
     *
     * @param  int              $id
     * @param UpdateStockRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateStockRequest $request)
    {
        $stock = $this->stockRepository->findWithoutFail($id);

        if (empty($stock)) {
            Flash::error('Stock not found');

            return redirect(route('stocks.index'));
        }

        $stock = $this->stockRepository->update($request->all(), $id);

        Flash::success('Stock updated successfully.');

        return redirect(route('stocks.index'));
    }

    /**
     * Remove the specified Stock from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $stock = $this->stockRepository->findWithoutFail($id);

        if (empty($stock)) {
            Flash::error('Stock not found');

            return redirect(route('stocks.index'));
        }

        $this->stockRepository->delete($id);

        Flash::success('Stock deleted successfully.');

        return redirect(route('stocks.index'));
    }
}
