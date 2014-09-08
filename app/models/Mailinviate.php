<?php
class Mailinviate extends Eloquent {
	protected $table="mail_inviate";
	protected $primaryKey = 'id_mail';
	protected $fillable = array('to', 'object', 'text');
	protected $guarded = array('id_mail');
	
	public static function qFindAllMail() {
		return static::where('to','!=','NULL')->orderBy('created_at','ASC')->get();
	}
	
	public static function qFindAllMailnotSendedorConfirmed() {
		return static::where('send','==','0')->orWhere('recived','==','0')->orderBy('created_at','ASC')->get();
	}

}