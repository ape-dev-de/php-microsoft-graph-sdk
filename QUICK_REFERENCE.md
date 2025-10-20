# Quick Reference Card

## Generate SDK

```bash
# Lightweight (fast, core models only)
php generate.php

# Full (complete API, memory-efficient chunking)
php generate-chunked.php
```

## Basic Usage

```php
use ApeDevDe\MicrosoftGraphSdk\GraphServiceClient;
use ApeDevDe\MicrosoftGraphSdk\Authentication\BearerTokenAuthenticationProvider;
use Symfony\Component\HttpClient\Psr18Client;
use Nyholm\Psr7\Factory\Psr17Factory;

// Setup
$httpClient = new Psr18Client();
$factory = new Psr17Factory();
$auth = new BearerTokenAuthenticationProvider('YOUR_TOKEN');

// Create client
$client = GraphServiceClient::create($httpClient, $factory, $factory, $auth);
```

## Common Operations

```php
// Get current user
$me = $client->me()->get();

// List users
$users = $client->users()->get();

// Get user by ID
$user = $client->users()->byId('user-id')->get();

// Update user
$user->setJobTitle('New Title');
$client->users()->byId('user-id')->patch($user);

// Delete user
$client->users()->byId('user-id')->delete();

// Get messages
$messages = $client->me()->messages()->get();

// List groups
$groups = $client->groups()->get();
```

## Query Parameters

```php
$users = $client->users()->get([
    '$select' => 'displayName,mail',           // Select fields
    '$filter' => "department eq 'Sales'",      // Filter
    '$orderby' => 'displayName',               // Sort
    '$top' => 10,                              // Limit
    '$skip' => 20,                             // Skip
    '$expand' => 'manager',                    // Expand related
    '$search' => '"John"',                     // Search
    '$count' => true                           // Include count
]);
```

## Authentication

```php
// Bearer Token
$auth = new BearerTokenAuthenticationProvider('token');

// Client Credentials (OAuth 2.0)
$auth = new ClientCredentialsAuthenticationProvider(
    'tenant-id',
    'client-id', 
    'client-secret',
    $httpClient,
    $factory,
    $factory
);
```

## Error Handling

```php
use ApeDevDe\MicrosoftGraphSdk\Http\GraphException;

try {
    $user = $client->users()->byId('invalid')->get();
} catch (GraphException $e) {
    echo "Error: " . $e->getMessage();
    echo "Status: " . $e->getCode();
}
```

## File Structure

```
build/
├── Models/              # DTOs (User, Group, Message, etc.)
├── RequestBuilders/     # Request builders
├── Http/               # GraphClient, GraphException
└── Authentication/     # Auth providers
```

## Generator Comparison

| Feature | Lightweight | Chunked |
|---------|------------|---------|
| Command | `php generate.php` | `php generate-chunked.php` |
| Time | < 1 min | 5-15 min |
| Memory | ~50MB | ~200-500MB |
| Models | 19 core | All from spec |
| Use Case | Development | Production |

## Troubleshooting

```bash
# Memory error
php -d memory_limit=1G generate-chunked.php

# Clean and regenerate
rm -rf build tmp openapi.yaml
php generate.php

# Check generated files
ls -la build/Models/
ls -la build/RequestBuilders/
```

## Documentation

- `README.md` - Full documentation
- `QUICKSTART.md` - Getting started
- `ARCHITECTURE.md` - Architecture details
- `GENERATOR_GUIDE.md` - Generator comparison
- `SOLUTION_SUMMARY.md` - Complete solution overview

## Support

- Microsoft Graph Docs: https://docs.microsoft.com/graph/
- OpenAPI Spec: https://github.com/microsoftgraph/msgraph-metadata
