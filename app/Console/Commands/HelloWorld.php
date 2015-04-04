<?php namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class HelloWorld extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'hello';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Exibe uma mensagem de Hello.';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{
		$name = $this->input->getArgument("name");

        $this->info("Hello {$name}!"); // escreve no terminal (ou a saída padrão)
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return [
			['name', InputArgument::OPTIONAL, 'O nome que deverá ser exibido.', 'World'],
		];
	}
}
