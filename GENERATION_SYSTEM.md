# Request Builder Auto-Generation System

## Overview

The `generate-v2.php` script now includes a comprehensive auto-generation system for request builders that recursively processes API paths and generates fully-typed PHP request builder classes.

## Key Features

### 1. **Nested Path Tree Structure**
- Paths are organized into a recursive tree structure
- Example: `/sites/drives` becomes:
  ```php
  [
    'sites' => [
      'pathParts' => ['sites'],
      'childPaths' => [
        'drives' => [/* full path spec */]
      ]
    ]
  ]
  ```

### 2. **Return Type Resolution**

#### **$ref Resolution**
- Direct schema references are resolved to PHP class names
- Example: `#/components/schemas/microsoft.graph.DriveItem` → `DriveItem`

#### **anyOf Handling**
- Multiple possible return types are combined with union syntax
- Example: `anyOf: [DriveItem, stdClass]` → `DriveItem|stdClass`

#### **allOf Handling (Compound Models)**
- Creates compound models that extend base classes with additional properties
- Example: `allOf: [DriveItem, {properties: {foo}}]` → generates `FooDriveItem extends DriveItem`

#### **Response $ref**
- Resolves response references from `components.responses`
- Extracts schema types from response content

### 3. **Parameter Handling**

#### **Parameter Extraction**
- Extracts parameters from operation definitions
- Resolves parameter `$ref` from `components.parameters`
- Captures: name, type, required status, description

#### **Parameter Ordering**
- `select` parameter comes first
- `expand` parameter comes second
- All other parameters follow

### 4. **Recursive Request Builder Generation**

#### **HTTP Methods**
Each request builder includes methods for available HTTP operations:
- `get()` - with query parameters (select, expand, etc.)
- `post($body)` - with request body
- `put($body)` - with request body
- `patch($body)` - with request body
- `delete()` - no body

#### **Child Path Navigation**
- Child paths become navigation methods
- Example: `/sites` has method `drives()` that returns `DrivesRequestBuilder`
- Enables fluent API: `$client->sites()->drives()->get()`

### 5. **Model Generation**

#### **Standard Models**
- Generated from `components.schemas`
- Includes all properties with proper PHP types

#### **Compound Models**
- Auto-generated for `allOf` patterns with additional properties
- Extends base model class
- Adds extra properties from inline schema

## Implementation Details

### Core Functions

1. **`loadResponses()`**
   - Loads all response definitions from OpenAPI spec
   - Parses `components.responses` section

2. **`loadParameters()`**
   - Loads all parameter definitions from OpenAPI spec
   - Parses `components.parameters` section

3. **`collectPathesRecursive($namespace)`**
   - Builds nested tree structure from flat path list
   - Organizes paths by hierarchy

4. **`collectRequestBuildersRecursive($path, $node, $allResponses, $allParameters)`**
   - Recursively processes path tree
   - Extracts method information, return types, and parameters
   - Builds complete request builder metadata

5. **`resolveReturnTypes($responses, $allResponses)`**
   - Resolves return types from response definitions
   - Handles $ref, anyOf, allOf patterns

6. **`resolveSchemaTypes($schema)`**
   - Resolves types from schema definitions
   - Handles complex type patterns

7. **`extractParameters($operation, $allParameters)`**
   - Extracts and orders parameters
   - Resolves parameter references
   - Prioritizes select/expand

8. **`generateRequestBuilderClasses($namespace, $requestBuilders, $schemas)`**
   - Generates all request builder classes for a namespace
   - Creates compound models as needed
   - Writes PHP class files

9. **`generateRequestBuilderCode($namespace, $className, $path, $builderInfo)`**
   - Generates complete PHP class code
   - Includes imports, methods, and documentation

10. **`generateCompoundModel($baseName, $schema, $allSchemas)`**
    - Generates compound model classes for allOf patterns
    - Creates inheritance hierarchy

## Code Generation Architecture

### Template-Based Generation

All code is generated using PHP templates from the `templates/` folder:

- **`RequestBuilder.php`** - Main request builder class structure
- **`HttpMethod.php`** - HTTP method generation (GET, POST, PUT, PATCH, DELETE)
- **`ChildPathMethod.php`** - Child path navigation methods

### No QueryOptions

The system uses **direct parameters** instead of QueryOptions classes:
- Parameters are extracted from OpenAPI operations
- Ordered with `select` and `expand` first
- Type-safe with proper PHP type hints
- Optional parameters default to `null`

## Generated Code Structure

### Request Builder Example

```php
<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\Models\DriveItem;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\ItemsRequestBuilder;

/**
 * Request builder for drives
 */
class DrivesRequestBuilder extends BaseRequestBuilder
{
    /**
     * Get drives with optional query parameters
     *
     * @param string|null $select Select properties
     * @param string|null $expand Expand related entities
     * @param string|null $filter Filter results
     * @return DriveItem|array
     */
    public function get(?string $select = null, ?string $expand = null, ?string $filter = null): mixed
    {
        $queryParams = [];
        if ($select !== null) {
            $queryParams['select'] = $select;
        }
        if ($expand !== null) {
            $queryParams['expand'] = $expand;
        }
        if ($filter !== null) {
            $queryParams['filter'] = $filter;
        }
        $url = $this->requestUrl;
        if (!empty($queryParams)) {
            $url .= '?' . http_build_query($queryParams);
        }
        $response = $this->client->request('GET', $url);
        return $response;
    }

    /**
     * Create a new drive
     *
     * @param array $body Request body
     * @return mixed
     */
    public function post(array $body = []): mixed
    {
        $url = $this->requestUrl;
        $response = $this->client->request('POST', $url, $body);
        return $response;
    }

    /**
     * Navigate to items
     *
     * @return ItemsRequestBuilder
     */
    public function items(): ItemsRequestBuilder
    {
        return new ItemsRequestBuilder($this->client, $this->requestUrl . '/items');
    }
}
```

### Compound Model Example

```php
<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Compound model extending DriveItem
 */
class FooDriveItem extends DriveItem
{
    /**
     * Additional foo property
     * @var string
     */
    public string $foo;
}
```

## Usage

Run the generator:

```bash
php generate-v2.php
```

The script will:
1. Download/load OpenAPI specification
2. Parse schemas, responses, and parameters
3. Chunk paths by namespace
4. Build nested path trees
5. Generate request builders recursively
6. Generate compound models as needed
7. Output all classes to `build/` directory

## Benefits

- **Type Safety**: All return types and parameters are properly typed
- **Fluent API**: Chained navigation through API structure
- **Complete Coverage**: All paths, methods, and parameters included
- **Maintainable**: Auto-generated from OpenAPI spec
- **Extensible**: Easy to add new features to generation logic
