<?php
namespace App\Controllers;
use App\Models\BukuModel;

class BukuController extends BaseController
{
    protected $bukuModel;

    public function __construct() { $this->bukuModel = new BukuModel(); }

    public function landing() { return view('landing_page'); }

    public function index()
    {
        $data['buku'] = $this->bukuModel->findAll();
        return view('buku/index', $data);
    }

    public function create() { return view('buku/form'); }

    public function store()
    {
        if (!$this->validate($this->bukuModel->validationRules, $this->bukuModel->validationMessages)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
        $this->bukuModel->save($this->request->getPost());
        return redirect()->to('/buku')->with('success', 'Buku berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $data['buku'] = $this->bukuModel->find($id);
        return view('buku/form', $data);
    }

    public function update($id)
    {
        if (!$this->validate($this->bukuModel->validationRules, $this->bukuModel->validationMessages)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
        $data = $this->request->getPost();
        $data['id'] = $id;
        $this->bukuModel->save($data);
        return redirect()->to('/buku')->with('success', 'Buku berhasil diperbarui.');
    }

    public function delete($id)
    {
        $this->bukuModel->delete($id);
        return redirect()->to('/buku')->with('success', 'Buku berhasil dihapus.');
    }
}