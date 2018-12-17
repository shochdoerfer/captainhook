<?php
/**
 * This file is part of CaptainHook.
 *
 * (c) Sebastian Feldmann <sf@sebastian.feldmann.info>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace CaptainHook\App\Console\Command\Hook;

use CaptainHook\App\Config;
use CaptainHook\App\Console\Command\Hook;
use CaptainHook\App\Hooks;
use SebastianFeldmann\Git;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class PrepareCommitMessage
 *
 * @package CaptainHook
 * @author  Sebastian Feldmann <sf@sebastian-feldmann.info>
 * @link    https://github.com/sebastianfeldmann/captainhook
 * @since   Class available since Release 3.0.1
 */
class PrepareCommitMsg extends Hook
{
    /**
     * Hook to execute
     *
     * @var string
     */
    protected $hookName = Hooks::PREPARE_COMMIT_MSG;

    /**
     * Configure the command.
     */
    protected function configure()
    {
        parent::configure();
        $this->addArgument('file', InputArgument::REQUIRED, 'File containing the commit log message');
        $this->addArgument('mode', InputArgument::OPTIONAL, 'Current commit mode');
        $this->addArgument('hash', InputArgument::OPTIONAL, 'Given commit hash');
    }
    /**
     * Read the commit message from file.
     *
     * @param \Symfony\Component\Console\Input\InputInterface   $input
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     * @param \CaptainHook\App\Config                           $config
     * @param \SebastianFeldmann\Git\Repository                 $repository
     */
    protected function setup(InputInterface $input, OutputInterface $output, Config $config, Git\Repository $repository)
    {
        // TODO: the message preparation settings have to be stored in the repository object
    }
}
