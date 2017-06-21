<?php
namespace App\Shell;

use Cake\Console\Shell;
use Cake\Log\Log;

/**
 * Messenger shell command.
 */
class MessengerShell extends Shell
{

    /**
     * Manage the available sub-commands along with their arguments and help
     *
     * @see http://book.cakephp.org/3.0/en/console-and-shells.html#configuring-options-and-generating-help
     *
     * @return \Cake\Console\ConsoleOptionParser
     */
    public function getOptionParser()
    {
        $parser = parent::getOptionParser();

        return $parser;
    }

    /**
     * main() method.
     *
     * @return bool|int|null Success or error code.
     */
    public function main($message)
    {
        $this->out($this->OptionParser->help());
        $this->out($message);
        Log::write('debug', $message);
    }

    public function add($first, $second)
    {
      $result = $first + $second;
      $this->out($result);
      Log::write('debug', __('Added result is: {0} ', $result));
    }
}
