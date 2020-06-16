<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAlmacenRequest;
use App\Http\Requests\UpdateAlmacenRequest;
use App\Repositories\AlmacenRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Categoria;


class AlmacenController extends AppBaseController
{
    /** @var  AlmacenRepository */
    private $almacenRepository;

    public function __construct(AlmacenRepository $almacenRepo)
    {
        $this->almacenRepository = $almacenRepo;
    }

    /**
     * Display a listing of the Almacen.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->almacenRepository->pushCriteria(new RequestCriteria($request));
        $almacens = $this->almacenRepository->all();

        return view('almacens.index')
            ->with('almacens', $almacens);
    }

    /**
     * Show the form for creating a new Almacen.
     *
     * @return Response
     */
    public function create()
    {

     $categorias = Categoria::pluck('nombre','id');
        return view('almacens.create',compact(
            'categorias'));
    }

    /**
     * Store a newly created Almacen in storage.
     *
     * @param CreateAlmacenRequest $request
     *
     * @return Response
     */
    public function store(CreateAlmacenRequest $request)
    {
        $input = $request->all();

        $almacen = $this->almacenRepository->create($input);

        Flash::success('Almacen saved successfully.');

        return redirect(route('almacens.index'));
    }

    /**
     * Display the specified Almacen.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $almacen = $this->almacenRepository->findWithoutFail($id);

        if (empty($almacen)) {
            Flash::error('Almacen not found');

            return redirect(route('almacens.index'));
        }

        return view('almacens.show')->with('almacen', $almacen);
    }

    /**
     * Show the form for editing the specified Almacen.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $almacen = $this->almacenRepository->findWithoutFail($id);
         $categorias = Categoria::pluck('nombre', 'id');


        if (empty($almacen)) {
            Flash::error('Almacen not found');

            return redirect(route('almacens.index'));
        }

       
        return view('almacens.edit', compact('almacen', 'categorias'));
    }

    /**
     * Update the specified Almacen in storage.
     *
     * @param  int              $id
     * @param UpdateAlmacenRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAlmacenRequest $request)
    {
        $almacen = $this->almacenRepository->findWithoutFail($id);

        if (empty($almacen)) {
            Flash::error('Almacen not found');

            return redirect(route('almacens.index'));
        }

        $almacen = $this->almacenRepository->update($request->all(), $id);

        Flash::success('Almacen updated successfully.');

        return redirect(route('almacens.index'));
    }

    /**
     * Remove the specified Almacen from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $almacen = $this->almacenRepository->findWithoutFail($id);

        if (empty($almacen)) {
            Flash::error('Almacen not found');

            return redirect(route('almacens.index'));
        }

        $this->almacenRepository->delete($id);

        Flash::success('Almacen deleted successfully.');

        return redirect(route('almacens.index'));
    }
}
