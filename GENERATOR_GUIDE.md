# SDK Generator Guide

## Overview

This project includes two generator approaches:

### 1. Lightweight Generator (`generate.php`)
- **Memory**: Low (~50MB)
- **Speed**: Fast (< 1 minute)
- **Coverage**: Core models only (User, Group, Message, Calendar, Event, Application)
- **Use case**: Quick start, common scenarios

### 2. Chunked Generator (`generate-chunked.php`)
- **Memory**: Medium (~200-500MB)
- **Speed**: Slower (5-15 minutes)
- **Coverage**: Full API from OpenAPI specification
- **Use case**: Complete API coverage, production use

## Quick Start (Lightweight)

```bash
php generate.php
```

This generates:
- Core models (User, Group, Message, etc.)
- Request builders with full query support
- Authentication providers
- HTTP client layer

**Pros:**
- Fast generation
- Low memory usage
- Covers 80% of common use cases

**Cons:**
- Limited to predefined models
- Manual updates needed for new entities

## Full Generation (Chunked)

```bash
php generate-chunked.php
```

This:
1. Downloads Microsoft Graph OpenAPI spec (~50MB YAML)
2. Chunks the file by namespace to avoid memory issues
3. Processes each chunk separately
4. Generates models and request builders for ALL entities
5. Includes query parameter support based on OpenAPI definitions

**Pros:**
- Complete API coverage
- Auto-detects query parameter support
- Generated from official spec

**Cons:**
- Longer generation time
- Higher memory usage
- Requires OpenAPI file download

## Memory-Efficient Processing

The chunked generator uses several techniques to minimize memory:

### 1. Line-by-Line Reading
```php
$handle = fopen(OPENAPI_FILE, 'r');
while (($line = fgets($handle)) !== false) {
    // Process line
}
```

### 2. Namespace Chunking
- Splits OpenAPI file into separate files per namespace
- Processes one namespace at a time
- Frees memory after each namespace

### 3. Garbage Collection
```php
gc_collect_cycles(); // After each namespace
```

### 4. Temporary Files
- Stores chunks in `/tmp` directory
- Cleans up after generation

## Generated Structure

```
build/
├── Models/
│   ├── Entity.php (base class)
│   ├── DirectoryObject.php (extends Entity)
│   ├── User.php
│   ├── Group.php
│   ├── Message.php
│   ├── UserCollectionResponse.php
│   └── ... (all other models)
│
├── RequestBuilders/
│   ├── BaseRequestBuilder.php
│   ├── GraphRequestBuilder.php (root)
│   ├── UsersRequestBuilder.php
│   ├── UserItemRequestBuilder.php
│   └── ... (all other builders)
│
├── Http/
│   ├── GraphClient.php
│   └── GraphException.php
│
└── Authentication/
    ├── AuthenticationProvider.php
    ├── BearerTokenAuthenticationProvider.php
    └── ClientCredentialsAuthenticationProvider.php
```

## Query Parameter Support

The chunked generator analyzes the OpenAPI spec to determine which query parameters are supported for each endpoint:

### Detected Parameters

- **$select**: Choose specific properties
- **$filter**: Filter results
- **$orderby**: Sort results
- **$top**: Limit results
- **$skip**: Skip results
- **$expand**: Include related resources
- **$search**: Full-text search
- **$count**: Include count

### Generated Methods

```php
// If endpoint supports these parameters:
public function get(?array $queryParameters = null): UserCollectionResponse
{
    // Supported query parameters:
    // - $select: Select specific properties
    // - $filter: Filter results
    // - $orderby: Order results
    // - $top: Limit number of results
    // ...
}
```

## Customization

### Adding Custom Models (Lightweight)

Edit `generate.php` and add to the `$models` array:

```php
'MyCustomModel' => [
    'extends' => 'Entity',
    'properties' => [
        'customProperty' => ['type' => '?string', 'description' => 'My property'],
    ],
],
```

### Extending Generated Models

Create a new class that extends the generated model:

```php
namespace App\Models;

use ApeDevDe\MicrosoftGraphSdk\Models\User as BaseUser;

class User extends BaseUser
{
    public function getFullName(): string
    {
        return $this->getGivenName() . ' ' . $this->getSurname();
    }
}
```

### Custom Request Builders

Extend generated request builders:

```php
namespace App\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\UsersRequestBuilder as BaseBuilder;

class UsersRequestBuilder extends BaseBuilder
{
    public function getByDepartment(string $department): UserCollectionResponse
    {
        return $this->get([
            '$filter' => "department eq '{$department}'"
        ]);
    }
}
```

## Troubleshooting

### Memory Errors

If you get memory errors with the chunked generator:

1. **Increase PHP memory limit:**
```bash
php -d memory_limit=1G generate-chunked.php
```

2. **Use lightweight generator instead:**
```bash
php generate.php
```

3. **Process specific namespaces only:**
Edit `generate-chunked.php` and filter namespaces:
```php
if (!in_array($namespace, ['users', 'groups', 'me'])) {
    continue;
}
```

### Parse Errors

If YAML parsing fails:

1. **Check OpenAPI file:**
```bash
head -n 100 openapi.yaml
```

2. **Re-download:**
```bash
rm openapi.yaml
php generate-chunked.php
```

3. **Use lightweight generator:**
```bash
php generate.php
```

### Missing Models

If a model is missing:

**Lightweight generator:**
- Add it manually to `generate.php`

**Chunked generator:**
- Check if it exists in OpenAPI spec
- Verify namespace processing
- Check tmp/ directory for chunks

## Performance Tips

### 1. Cache Generated Code

Commit the `build/` directory to version control:

```bash
git add build/
git commit -m "Add generated SDK"
```

### 2. Regenerate Periodically

Update monthly or when Microsoft releases API changes:

```bash
rm openapi.yaml
php generate-chunked.php
```

### 3. Use Lightweight for Development

Use `generate.php` during development, `generate-chunked.php` for production.

### 4. Selective Generation

Modify generators to only process namespaces you need:

```php
$allowedNamespaces = ['users', 'groups', 'me', 'mail'];
if (!in_array($namespace, $allowedNamespaces)) {
    continue;
}
```

## Comparison

| Feature | Lightweight | Chunked |
|---------|------------|---------|
| Generation Time | < 1 min | 5-15 min |
| Memory Usage | ~50MB | ~200-500MB |
| Model Coverage | Core only | Complete |
| Query Detection | Manual | Automatic |
| OpenAPI Download | No | Yes |
| Customization | Easy | Limited |
| Production Ready | Yes | Yes |

## Recommendations

### For Development
Use **lightweight generator** (`generate.php`):
- Fast iteration
- Low resource usage
- Covers common scenarios

### For Production
Use **chunked generator** (`generate-chunked.php`):
- Complete API coverage
- Auto-detected capabilities
- Official spec compliance

### For CI/CD
Cache generated code or use lightweight generator:
```yaml
# .github/workflows/build.yml
- name: Generate SDK
  run: php generate.php
```

## Next Steps

1. **Generate SDK:**
   ```bash
   php generate.php  # or generate-chunked.php
   ```

2. **Install dependencies:**
   ```bash
   composer install
   ```

3. **Use the SDK:**
   ```php
   $client = GraphServiceClient::create(...);
   $user = $client->me()->get();
   ```

4. **Read documentation:**
   - [README.md](README.md) - Full documentation
   - [QUICKSTART.md](QUICKSTART.md) - Quick start guide
   - [ARCHITECTURE.md](ARCHITECTURE.md) - Architecture details
