<?php

namespace App\Livewire\Backend\FtpServer;

use App\Models\FtpServer;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination, WithoutUrlPagination;
    public $page = "FTP server", $addData = true, $updateData = false, $deleteId, $shortby = "id", $short = "DESC", $search = "";
    // page field
    public $name, $title, $link, $serverId, $server;


    public function clearShort()
    {
        $this->shortby = "id";
        $this->short = "DESC";
    }


    /**
     * Reseting all inputted fields
     * @return void
     */
    public function resetFields()
    {
        $this->name = '';
        $this->title = '';
        $this->link = '';
    }


    /**
     * Open Add Post form
     * @return void
     */
    public function create()
    {
        $this->resetFields();
        $this->addData = true;
        $this->updateData = false;
    }




    /**
     * store the user inputted post data in the posts table
     * @return void
     */
    public function store()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'link' => 'required|string|max:255',
        ]);

        try {

            FtpServer::create([
                'name' => $this->name,
                'title' => $this->title,
                'link' => $this->link,
            ]);

            $this->dispatch('alert', ['type' => 'success',  'message' => $this->page . ' has been added successfully!']);

            $this->resetFields();
        } catch (\Exception $ex) {
            $this->dispatch('alert', ['type' => 'error',  'message' => 'Something went wrong!']);
        }
    }


    /**
     * show existing post data in edit post form
     * @param mixed $id
     * @return void
     */
    public function edit($id)
    {
        try {
            $server = FtpServer::findOrFail($id);
            $this->server = $server;
            $this->name = $server->name;
            $this->title = $server->title;
            $this->link = $server->link;
            $this->serverId = $server->id;

            $this->updateData = true;
            $this->addData = false;
        } catch (\Exception $ex) {
            $this->dispatch('alert', ['type' => 'error',  'message' => 'Something went wrong!']);
        }
    }



    /**
     * update the post data
     * @return void
     */
    public function update()
    {
        $server = FtpServer::find($this->serverId);

        $this->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'link' => 'required|string|max:255',
        ]);

        try {

            $server->update([
                'name' => $this->name,
                'title' => $this->title,
                'link' => $this->link,
            ]);

            $this->dispatch('alert', ['type' => 'success',  'message' => $this->page . ' has been updated successfully!']);

            $this->resetFields();
            $this->updateData = false;
            $this->addData = true;
        } catch (\Exception $ex) {
            $this->dispatch('alert', ['type' => 'error',  'message' => 'Something went wrong!']);
        }
    }


    public function getDeleteId($id)
    {
        $this->deleteId = $id;
    }


    /**
     * delete specific post data from the posts table
     * @param mixed $id
     * @return void
     */
    public function delete()
    {
        try {
            $server = FtpServer::find($this->deleteId);
            $server->delete();
            $this->dispatch('alert', ['type' => 'success',  'message' => $this->page . ' has been deleted successfully!']);
        } catch (\Exception $e) {
            $this->dispatch('alert', ['type' => 'error',  'message' => 'Something went wrong!']);
        }
    }

    public function render()
    {
        return view('livewire.backend.ftp-server.index', [
            'servers' => FtpServer::search('name', $this->search)->orderBy($this->shortby, $this->short)->paginate(12),
        ]);
    }
}
