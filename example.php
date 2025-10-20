<?php

declare(strict_types=1);

/**
 * Example usage of Microsoft Graph SDK
 * 
 * This file demonstrates how to use the SDK with different authentication methods
 * and perform common operations.
 */

require_once __DIR__ . '/vendor/autoload.php';

use ApeDevDe\MicrosoftGraphSdk\GraphServiceClient;
use ApeDevDe\MicrosoftGraphSdk\Authentication\BearerTokenAuthenticationProvider;
use ApeDevDe\MicrosoftGraphSdk\Authentication\ClientCredentialsAuthenticationProvider;
use Symfony\Component\HttpClient\Psr18Client;
use Nyholm\Psr7\Factory\Psr17Factory;

// ============================================================================
// Example 1: Using Bearer Token Authentication
// ============================================================================

function exampleWithBearerToken(): void
{
    echo "=== Example 1: Bearer Token Authentication ===\n\n";

    // Create HTTP client and PSR-17 factories
    $httpClient = new Psr18Client();
    $psr17Factory = new Psr17Factory();

    // Create authentication provider with your access token
    $accessToken = getenv('GRAPH_ACCESS_TOKEN') ?: 'YOUR_ACCESS_TOKEN_HERE';
    $authProvider = new BearerTokenAuthenticationProvider($accessToken);

    // Create Graph Service Client
    $graphClient = GraphServiceClient::create(
        $httpClient,
        $psr17Factory,
        $psr17Factory,
        $authProvider
    );

    try {
        // Get current user
        $me = $graphClient->me()->get();
        echo "Current User: " . $me->getDisplayName() . "\n";
        echo "Email: " . $me->getMail() . "\n\n";

        // Get user's messages with query parameters
        $messages = $graphClient->me()->messages()->get([
            '$select' => 'subject,from,receivedDateTime',
            '$top' => 5,
            '$orderby' => 'receivedDateTime desc'
        ]);

        echo "Recent Messages:\n";
        foreach ($messages->getValue() as $message) {
            echo "  - " . $message->getSubject() . "\n";
        }
    } catch (\Exception $e) {
        echo "Error: " . $e->getMessage() . "\n";
    }
}

// ============================================================================
// Example 2: Using Client Credentials Flow
// ============================================================================

function exampleWithClientCredentials(): void
{
    echo "\n=== Example 2: Client Credentials Flow ===\n\n";

    $httpClient = new Psr18Client();
    $psr17Factory = new Psr17Factory();

    // Create authentication provider with client credentials
    $tenantId = getenv('GRAPH_TENANT_ID') ?: 'YOUR_TENANT_ID';
    $clientId = getenv('GRAPH_CLIENT_ID') ?: 'YOUR_CLIENT_ID';
    $clientSecret = getenv('GRAPH_CLIENT_SECRET') ?: 'YOUR_CLIENT_SECRET';

    $authProvider = new ClientCredentialsAuthenticationProvider(
        $tenantId,
        $clientId,
        $clientSecret,
        $httpClient,
        $psr17Factory,
        $psr17Factory
    );

    $graphClient = GraphServiceClient::create(
        $httpClient,
        $psr17Factory,
        $psr17Factory,
        $authProvider
    );

    try {
        // List users
        $users = $graphClient->users()->get([
            '$select' => 'displayName,mail,userPrincipalName',
            '$top' => 10
        ]);

        echo "Users in organization:\n";
        foreach ($users->getValue() as $user) {
            echo "  - " . $user->getDisplayName() . " (" . $user->getUserPrincipalName() . ")\n";
        }
    } catch (\Exception $e) {
        echo "Error: " . $e->getMessage() . "\n";
    }
}

// ============================================================================
// Example 3: CRUD Operations on Users
// ============================================================================

function exampleCrudOperations(): void
{
    echo "\n=== Example 3: CRUD Operations ===\n\n";

    $httpClient = new Psr18Client();
    $psr17Factory = new Psr17Factory();
    $accessToken = getenv('GRAPH_ACCESS_TOKEN') ?: 'YOUR_ACCESS_TOKEN_HERE';
    $authProvider = new BearerTokenAuthenticationProvider($accessToken);

    $graphClient = GraphServiceClient::create(
        $httpClient,
        $psr17Factory,
        $psr17Factory,
        $authProvider
    );

    try {
        // Get a specific user
        $userId = 'user-id-here';
        echo "Getting user...\n";
        $user = $graphClient->users()->byId($userId)->get();
        echo "User: " . $user->getDisplayName() . "\n\n";

        // Update user
        echo "Updating user job title...\n";
        $user->setJobTitle('Senior Software Engineer');
        $updatedUser = $graphClient->users()->byId($userId)->patch($user);
        echo "Updated job title: " . $updatedUser->getJobTitle() . "\n\n";

        // Get user with specific fields
        echo "Getting user with selected fields...\n";
        $userWithFields = $graphClient->users()->byId($userId)->get([
            '$select' => 'displayName,jobTitle,department,officeLocation'
        ]);
        echo "Department: " . $userWithFields->getDepartment() . "\n";
        echo "Office: " . $userWithFields->getOfficeLocation() . "\n";

    } catch (\Exception $e) {
        echo "Error: " . $e->getMessage() . "\n";
    }
}

// ============================================================================
// Example 4: Working with Groups
// ============================================================================

function exampleGroups(): void
{
    echo "\n=== Example 4: Working with Groups ===\n\n";

    $httpClient = new Psr18Client();
    $psr17Factory = new Psr17Factory();
    $accessToken = getenv('GRAPH_ACCESS_TOKEN') ?: 'YOUR_ACCESS_TOKEN_HERE';
    $authProvider = new BearerTokenAuthenticationProvider($accessToken);

    $graphClient = GraphServiceClient::create(
        $httpClient,
        $psr17Factory,
        $psr17Factory,
        $authProvider
    );

    try {
        // List groups
        $groups = $graphClient->groups()->get([
            '$select' => 'displayName,description,mail',
            '$top' => 10
        ]);

        echo "Groups:\n";
        foreach ($groups->getValue() as $group) {
            echo "  - " . $group->getDisplayName() . "\n";
            if ($group->getDescription()) {
                echo "    Description: " . $group->getDescription() . "\n";
            }
        }
    } catch (\Exception $e) {
        echo "Error: " . $e->getMessage() . "\n";
    }
}

// ============================================================================
// Example 5: Error Handling
// ============================================================================

function exampleErrorHandling(): void
{
    echo "\n=== Example 5: Error Handling ===\n\n";

    $httpClient = new Psr18Client();
    $psr17Factory = new Psr17Factory();
    $authProvider = new BearerTokenAuthenticationProvider('invalid-token');

    $graphClient = GraphServiceClient::create(
        $httpClient,
        $psr17Factory,
        $psr17Factory,
        $authProvider
    );

    try {
        $user = $graphClient->me()->get();
        echo "User: " . $user->getDisplayName() . "\n";
    } catch (\ApeDevDe\MicrosoftGraphSdk\Http\GraphException $e) {
        echo "Graph API Error: " . $e->getMessage() . "\n";
        echo "Status Code: " . $e->getCode() . "\n";
    } catch (\Exception $e) {
        echo "General Error: " . $e->getMessage() . "\n";
    }
}

// ============================================================================
// Run Examples
// ============================================================================

echo "Microsoft Graph SDK - Usage Examples\n";
echo "====================================\n\n";

// Uncomment the examples you want to run:

// exampleWithBearerToken();
// exampleWithClientCredentials();
// exampleCrudOperations();
// exampleGroups();
// exampleErrorHandling();

echo "\nNote: Set environment variables or update the code with your credentials:\n";
echo "  - GRAPH_ACCESS_TOKEN\n";
echo "  - GRAPH_TENANT_ID\n";
echo "  - GRAPH_CLIENT_ID\n";
echo "  - GRAPH_CLIENT_SECRET\n";
