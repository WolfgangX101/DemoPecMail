<?php
class Mailinviate extends Eloquent {
	protected $table="mail_inviate";
	protected $primaryKey = 'id_mail';
	protected $fillable = array('to', 'object', 'text');
	protected $guarded = array('id_mail');
	
}