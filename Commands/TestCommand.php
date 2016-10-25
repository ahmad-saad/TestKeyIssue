<?php

namespace TestKeyIssue\Commands;

use Shopware\Commands\ShopwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Shopware\Components;
use Shopware\Components\Api\Manager;

class TestCommand extends ShopwareCommand
{

    private $logger = null;
    private $apiService = null;

    public function __construct(Components\Logger $logger) {

        $this->logger = $logger;
        parent::__construct();
    }

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('testcommand')
            ->setDescription('A simple test command.')
            ->setHelp(<<<EOF
The <info>%command.name%</info> is just a simple test command.
EOF
            )
        ;
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {

        // Get the article API resource
        $articleResource = Manager::getResource('article');


        /**
         * TEST
         */
        $articleArray = [
            'name' => 'TEST',
            'taxId' => 1,
            'active' => 1,
            'description' => 'description',
            'lastStock' => 50,
            'supplier' => 'Herstellername',
            'mainDetail' => [
                'active' => 1,
                'inStock' => 0,
                'number' => '47110815',
                'prices' => [
                    [
                        'customerGroupKey' => 'EK',
                        'price' => 99,
                        'pseudoPrice' => 999
                    ],
                ]
            ]
        ];
        $article = $articleResource->create($articleArray);
        die();


    }

}
