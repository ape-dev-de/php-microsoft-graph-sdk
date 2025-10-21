# Microsoft Graph SDK Tests

## Overview

This test suite provides comprehensive non-destructive testing for all Microsoft Graph API namespaces.

## Setup

### 1. Install Dependencies

```bash
composer install
```

### 2. Configure Environment

Copy the example environment file:

```bash
cp .env.example .env
```

Edit `.env` with your Microsoft Graph credentials:

```env
# For Client Credentials (recommended for testing)
GRAPH_AUTH_METHOD=client_credentials
GRAPH_TENANT_ID=your_tenant_id
GRAPH_CLIENT_ID=your_client_id
GRAPH_CLIENT_SECRET=your_client_secret

# Optional: Test-specific IDs
TEST_USER_ID=user_id_for_testing
TEST_GROUP_ID=group_id_for_testing
TEST_SKIP_DESTRUCTIVE=true
```

### 3. Generate SDK

```bash
php generate-chunked.php
```

### 4. Generate Tests

```bash
php generate-tests.php
```

This will create test files for all namespaces in `tests/Namespaces/`.

## Running Tests

### Run All Tests

```bash
composer test
```

Or directly with PHPUnit:

```bash
vendor/bin/phpunit
```

### Run Specific Namespace

```bash
vendor/bin/phpunit tests/Namespaces/UsersTest.php
```

### Run with Coverage

```bash
composer test:coverage
```

Coverage report will be generated in `coverage/` directory.

## Test Structure

```
tests/
├── bootstrap.php                 ← Test bootstrap
├── GraphTestCase.php            ← Base test class
├── Namespaces/                  ← Namespace-specific tests
│   ├── UsersTest.php
│   ├── GroupsTest.php
│   ├── ApplicationsTest.php
│   └── ... (auto-generated)
└── README.md
```

## Test Types

### Non-Destructive Tests (Always Run)

- ✅ Builder accessibility
- ✅ Type safety verification
- ✅ QueryOptions constants
- ✅ Collection response methods
- ✅ Model getters/setters

### API Tests (Require Credentials)

These tests are skipped by default and require valid Microsoft Graph credentials:

- Get collection with query parameters
- Get specific item by ID
- Filter, order, select operations
- Pagination

To enable API tests, configure your `.env` file and remove the `markTestSkipped()` calls.

## GitHub Actions

Tests run automatically on:
- Push to `main` or `develop` branches
- Pull requests
- Weekly schedule (Sundays)

### Required Secrets

Configure these in GitHub repository settings:

```
GRAPH_AUTH_METHOD
GRAPH_TENANT_ID
GRAPH_CLIENT_ID
GRAPH_CLIENT_SECRET
TEST_USER_ID (optional)
TEST_GROUP_ID (optional)
```

## Writing Custom Tests

Extend `GraphTestCase` for access to the authenticated client:

```php
<?php

namespace ApeDevDe\MicrosoftGraphSdk\Tests;

class MyCustomTest extends GraphTestCase
{
    public function testSomething(): void
    {
        $users = self::$client->users()->get();
        $this->assertNotNull($users);
    }
}
```

## Test Coverage

The test suite covers:

- ✅ All 200+ namespaces
- ✅ Type safety verification
- ✅ QueryOptions field constants
- ✅ Collection response methods
- ✅ Model structure
- ✅ Fluent API interfaces

## Skipping Destructive Tests

By default, all destructive operations (POST, PATCH, DELETE) are skipped:

```env
TEST_SKIP_DESTRUCTIVE=true
```

To enable destructive tests (use with caution!):

```env
TEST_SKIP_DESTRUCTIVE=false
```

## Troubleshooting

### Authentication Errors

Ensure your credentials have the required permissions:
- `User.Read.All`
- `Group.Read.All`
- `Application.Read.All`

### Missing Classes

Regenerate the SDK:

```bash
rm -rf build
php generate-chunked.php
```

### Test Generation

Regenerate tests after adding new namespaces:

```bash
php generate-tests.php
```

## CI/CD Integration

The test suite integrates with:
- ✅ GitHub Actions
- ✅ Codecov (coverage reports)
- ✅ Multiple PHP versions (8.1, 8.2, 8.3)

## Best Practices

1. **Always use non-destructive tests** in CI/CD
2. **Use test-specific accounts** for API testing
3. **Keep credentials secure** (use GitHub Secrets)
4. **Run tests before commits** to catch issues early
5. **Update tests** when adding new features

## Example Test Output

```
PHPUnit 10.0.0 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.0
Configuration: phpunit.xml

.............................................................  61 / 200 ( 30%)
.............................................................  122 / 200 ( 61%)
.............................................................  183 / 200 ( 91%)
.................                                              200 / 200 (100%)

Time: 00:05.123, Memory: 24.00 MB

OK (200 tests, 800 assertions)
```

## Support

For issues or questions:
- Check the main README.md
- Review GitHub Actions logs
- Verify .env configuration
