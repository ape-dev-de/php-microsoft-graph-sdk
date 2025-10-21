<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Tests;

use ApeDevDe\MicrosoftGraphSdk\GraphServiceClient;
use ApeDevDe\MicrosoftGraphSdk\Authentication\ClientCredentialsAuthenticationProvider;
use ApeDevDe\MicrosoftGraphSdk\Authentication\BearerTokenAuthenticationProvider;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\HttpFactory;
use PHPUnit\Framework\TestCase;

abstract class GraphTestCase extends TestCase
{
    protected static ?GraphServiceClient $client = null;
    protected static bool $skipDestructive = true;

    public static function setUpBeforeClass(): void
    {
        parent::setUpBeforeClass();
        
        self::$skipDestructive = (isset($_ENV['TEST_SKIP_DESTRUCTIVE']) && $_ENV['TEST_SKIP_DESTRUCTIVE'] == 'false') ? false : true;
        self::$client = self::createClient();
    }

    protected static function createClient(): GraphServiceClient
    {
        $httpClient = new Client([
            'timeout' => 30,
            'verify' => true,
        ]);
        
        $httpFactory = new HttpFactory();
        
        $authMethod = $_ENV['GRAPH_AUTH_METHOD'] ?? 'client_credentials';
        
        if ($authMethod === 'bearer') {
            $authProvider = new BearerTokenAuthenticationProvider(
                $_ENV['GRAPH_BEARER_TOKEN'] ?? ''
            );
        } else {
            $authProvider = new ClientCredentialsAuthenticationProvider(
                $_ENV['GRAPH_TENANT_ID'] ?? '',
                $_ENV['GRAPH_CLIENT_ID'] ?? '',
                $_ENV['GRAPH_CLIENT_SECRET'] ?? ''
            );
        }
        
        return GraphServiceClient::create(
            $httpClient,
            $httpFactory,
            $httpFactory,
            $authProvider
        );
    }

    protected function skipIfDestructive(string $reason = 'Destructive test skipped'): void
    {
        if (self::$skipDestructive) {
            $this->markTestSkipped($reason);
        }
    }

    protected function getTestUserId(): string
    {
        return $_ENV['TEST_USER_ID'] ?? '';
    }

    protected function getTestGroupId(): string
    {
        return $_ENV['TEST_GROUP_ID'] ?? '';
    }
}
