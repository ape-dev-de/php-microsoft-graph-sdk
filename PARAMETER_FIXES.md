# Parameter and Path Normalization Fixes

## Issues Fixed

### 1. **Path Parameters Not Normalized**

**Problem:**
```php
// Generated invalid code
public function {site-id1}(): {site-id1}RequestBuilder
{
    return new {site-id1}RequestBuilder($this->client, $this->requestUrl . '/{site-id1}');
}
```

**Solution:**
- Added `isPathParameter()` to detect path parameters like `{site-id}`, `{site-id1}`
- Added `normalizePathParameter()` to convert them properly:
  - `{site-id}` → `SiteRequestBuilder`, method: `byId($siteId)`
  - `{site-id1}` → `SiteRequestBuilder`, method: `byId($siteId)`
  - Removes `-id` suffix and numbers
  - Converts to PascalCase for class names
  - Uses `byId` as standard method name

**Result:**
```php
public function byId(string $siteId): SiteRequestBuilder
{
    return new SiteRequestBuilder($this->client, $this->requestUrl . '/' . $siteId);
}
```

### 2. **Query Parameters with $ Prefix**

**Problem:**
```php
// Generated invalid PHP with double $$
public function get(?int $$top = null, ?int $$skip = null): mixed
{
    if ($$top !== null) {
        $queryParams['$top'] = $$top;
    }
}
```

**Solution:**
- Added `normalizeParameterName()` to strip `$` prefix from parameter names
- Stores both normalized name (for PHP variable) and original name (for query string)
- Updated template to use `originalName` for query parameters

**Result:**
```php
public function get(?int $top = null, ?int $skip = null): mixed
{
    $queryParams = [];
    if ($top !== null) {
        $queryParams['$top'] = $top;  // Uses original name in query string
    }
    if ($skip !== null) {
        $queryParams['$skip'] = $skip;
    }
}
```

### 3. **Models Not Generated**

**Problem:**
```php
// Model generation was commented out
//generateIndividualModels($schemas, $output);
```

**Solution:**
- Uncommented model generation
- Models are now generated from schemas

**Result:**
- All models from `components.schemas` are now generated
- Proper class files in `build/Models/`

## New Functions Added

### `normalizeParameterName(string $name): string`
Removes `$` prefix and converts to camelCase:
- `$top` → `top`
- `$select` → `select`
- `$orderby` → `orderby`

### `isPathParameter(string $segment): bool`
Checks if a path segment is a parameter:
- `{site-id}` → `true`
- `sites` → `false`

### `normalizePathParameter(string $param): array`
Normalizes path parameters:
- Input: `{site-id1}`
- Output:
  ```php
  [
      'className' => 'Site',
      'methodName' => 'byId',
      'paramName' => 'siteId'
  ]
  ```

## Updated Templates

### `templates/HttpMethod.php`
- Uses `$param['originalName']` for query string keys
- Uses `$param['name']` for PHP variable names

### `templates/ByIdMethod.php`
- Accepts custom `$paramName` parameter
- Uses it in method signature and URL construction

## Parameter Extraction Changes

The `extractParameters()` function now:
1. Normalizes parameter names (removes `$` prefix)
2. Stores both `name` (normalized) and `originalName` (with `$`)
3. Maintains proper ordering (select, expand first)

Example:
```php
[
    'name' => 'top',           // For PHP variable
    'originalName' => '$top',  // For query string
    'type' => 'int',
    'required' => false,
    'description' => 'Show only the first n items'
]
```

## Class Name Generation

Path parameters are now properly handled:
- `sites/{site-id}/drives` generates:
  - `SitesRequestBuilder` (for `/sites`)
  - `SiteRequestBuilder` (for `/{site-id}`)
  - `DrivesRequestBuilder` (for `/drives`)

## Testing

All syntax checks pass:
```bash
php -l generate-v2.php
php -l templates/HttpMethod.php
php -l templates/ByIdMethod.php
```

## Example Generated Code

### Before (Broken)
```php
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\{site-id1}RequestBuilder;

public function get(?int $$top = null): mixed
{
    if ($$top !== null) {
        $queryParams['$top'] = $$top;
    }
}

public function {site-id1}(): {site-id1}RequestBuilder
{
    return new {site-id1}RequestBuilder($this->client, $this->requestUrl . '/{site-id1}');
}
```

### After (Fixed)
```php
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\SiteRequestBuilder;

public function get(?int $top = null, ?int $skip = null, ?string $filter = null): mixed
{
    $queryParams = [];
    if ($top !== null) {
        $queryParams['$top'] = $top;
    }
    if ($skip !== null) {
        $queryParams['$skip'] = $skip;
    }
    if ($filter !== null) {
        $queryParams['$filter'] = $filter;
    }
    // ... rest of method
}

public function byId(string $siteId): SiteRequestBuilder
{
    return new SiteRequestBuilder($this->client, $this->requestUrl . '/' . $siteId);
}
```

## Summary

✅ Path parameters normalized: `{site-id}` → `byId($siteId): SiteRequestBuilder`
✅ Query parameters fixed: `$top` → `$top` (variable), `'$top'` (query key)
✅ Models now generated from schemas
✅ All syntax errors resolved
✅ Clean, valid PHP code generated
