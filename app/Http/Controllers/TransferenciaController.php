<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTransferenciaRequest;
use App\Http\Requests\UpdateTransferenciaRequest;
use App\Repositories\TransferenciaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;
use Response;
use App\Models\Deposito;
use App\Models\Item;
use App\Models\Transferencia;
class TransferenciaController extends AppBaseController
{
    /** @var  TransferenciaRepository */
    private $transferenciaRepository;

    public function __construct(TransferenciaRepository $transferenciaRepo)
    {
        $this->transferenciaRepository = $transferenciaRepo;
    }

    /**
     * Display a listing of the Transferencia.
     *
     * @param Request $request
     *
     * @return Response|Factory|RedirectResponse|Redirector|View
     */
    public function index(Request $request)
    {
        $transferencias = $this->transferenciaRepository->all();

        return view('transferencias.index')
            ->with('transferencias', $transferencias);
    }

    /**
     * Show the form for creating a new Transferencia.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|Response
     */
    public function create()
    {
      $items = Item::pluck('item_nombre','id');
      $depositos = Deposito::pluck('descripcion','id','item_nombre','id');
      return view('transferencias.create',compact(
          'depositos','items'));
    }

    /**
     * Store a newly created Transferencia in storage.
     *
     * @param CreateTransferenciaRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|Response
     */
    public function store(CreateTransferenciaRequest $request)
    {
        $input = $request->all();

        $transferencia = $this->transferenciaRepository->create($input);

        Flash::success('Transferencia saved successfully.');

        return redirect(route('transferencias.index'));
    }

    /**
     * Display the specified Transferencia.
     *
     * @param int $id
     *
     * @return Factory|RedirectResponse|Redirector|View|Response
     */
    public function show($id)
    {
        $transferencia = $this->transferenciaRepository->find($id);

        if (empty($transferencia)) {
            Flash::error('Transferencia not found');

            return redirect(route('transferencias.index'));
        }

        return view('transferencias.show')->with('transferencia', $transferencia);
    }

    /**
     * Show the form for editing the specified Transferencia.
     *
     * @param int $id
     *
     * @return Factory|RedirectResponse|Redirector|View|Response
     */
    public function edit($id)
    {
        $transferencia = $this->transferenciaRepository->find($id);

        if (empty($transferencia)) {
            Flash::error('Transferencia not found');

            return redirect(route('transferencias.index'));
        }

        return view('transferencias.edit')->with('transferencia', $transferencia);
    }

    /**
     * Update the specified Transferencia in storage.
     *
     * @param int $id
     * @param UpdateTransferenciaRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|Response
     */
    public function update($id, UpdateTransferenciaRequest $request)
    {
        $transferencia = $this->transferenciaRepository->find($id);

        if (empty($transferencia)) {
            Flash::error('Transferencia not found');

            return redirect(route('transferencias.index'));
        }

        $transferencia = $this->transferenciaRepository->update($request->all(), $id);

        Flash::success('Transferencia updated successfully.');

        return redirect(route('transferencias.index'));
    }

    /**
     * Remove the specified Transferencia from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|Response
     */
    public function destroy($id)
    {
        $transferencia = $this->transferenciaRepository->find($id);

        if (empty($transferencia)) {
            Flash::error('Transferencia not found');

            return redirect(route('transferencias.index'));
        }

        $this->transferenciaRepository->delete($id);

        Flash::success('Transferencia deleted successfully.');

        return redirect(route('transferencias.index'));
    }
}
