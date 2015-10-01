<?php

namespace Delivery\Http\Controllers;

use Delivery\Http\Requests;
use Delivery\Http\Requests\AdminClientRequest;
use Delivery\Repositories\ClientRepository;
use Delivery\Repositories\UserRepository;

class ClientsController extends Controller
{
    private $repository;
    private $clientRepository;
    public function __construct(ClientRepository $repository, UserRepository $clientRepository)
    {
        $this->repository = $repository;
        $this->clientRepository = $clientRepository;
    }
    
    public function index(ClientRepository $repository)
    {
        $clients = $repository->paginate(20);
        return view ('admin.clients.index',compact('clients'));
    }       
    
    public function create()
    {
        $clients = $this->clientRepository->lists();
        return view('admin.clients.create',compact( 'clients'));
    }
    
    public function store(AdminClientRequest $request)
    {
        $data = $request->all();
        $this->repository->create($data);
        
        return redirect()->route('admin.clients.index');
    }
    
    public function edit($id)
    {
        $client = $this->repository->find($id);
        
        return view('admin.clients.edit',compact('client'));
    }
    
    public function update(AdminClientRequest $request, $id)
    {
        $data = $request->all();
        $this->repository->update($data, $id);
        
        return redirect()->route('admin.clients.index');
    }
}
