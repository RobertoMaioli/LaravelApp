<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//tabela referente a site_contatos do mysql

class SiteContato extends Model
{
    protected $table = 'site_contatos';
    protected $fillable = ['nome', 'telefone', 'email', 'contato', 'mensagem'];
}
