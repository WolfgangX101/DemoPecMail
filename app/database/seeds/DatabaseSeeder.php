<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

        $this->call('MailTableSeeder');
        $this->command->info('Mail table seeded!');
	}

}

class MailTableSeeder extends Seeder {

    public function run()
    {
        DB::table('mail_inviate')->delete();
        Mailinviate::create(array(
                'to' => 'prova1@gmail.com',
                'object' => 'prova 1',
                'text' => 'testo della prima prova',
								'created_at' => new DateTime,
                'updated_at' => new DateTime
        ));
        Mailinviate::create(array(
                'to' => 'prova2@gmail.com',
                'object' => 'prova 2',
                'text' => 'testo della seconda prova',
								'created_at' => new DateTime,
                'updated_at' => new DateTime
        ));
        Mailinviate::create(array(
                'to' => 'prova3@gmail.com',
                'object' => 'prova 3',
                'text' => 'testo della terza prova',
								'created_at' => new DateTime,
                'updated_at' => new DateTime
        ));    
    }
}
