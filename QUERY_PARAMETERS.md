# Query Parameters Usage

## Array Parameters (select, expand, orderby)

Array parameters like `$select`, `$expand`, and `$orderby` are automatically converted to comma-separated strings.

### Example Usage:

```php
// Select specific fields
$users = $client->users()->get(
    select: ['id', 'displayName', 'mail']
);
// Generates: ?$select=id,displayName,mail

// Expand related entities
$user = $client->users()->byId('user-id')->get(
    select: ['id', 'displayName'],
    expand: ['manager', 'directReports']
);
// Generates: ?$select=id,displayName&$expand=manager,directReports

// Order by multiple fields
$users = $client->users()->get(
    select: ['id', 'displayName'],
    orderby: ['displayName asc', 'mail desc']
);
// Generates: ?$select=id,displayName&$orderby=displayName asc,mail desc

// Combine multiple parameters
$sites = $client->sites()->get(
    select: ['id', 'name', 'webUrl'],
    expand: ['drive'],
    top: 10,
    filter: "siteCollection/root ne null"
);
// Generates: ?$select=id,name,webUrl&$expand=drive&$top=10&$filter=siteCollection/root ne null
```

### How It Works:

1. **Array Parameters**: `$select`, `$expand`, `$orderby` accept `string[]`
2. **Automatic Conversion**: Arrays are imploded with commas: `implode(',', $array)`
3. **Query String**: Built using `http_build_query()` for proper encoding

### Generated Code:

```php
public function get(?array $select = null, ?array $expand = null, ...): UserCollectionResponse
{
    $queryParams = [];
    if ($select !== null) {
        $queryParams['$select'] = implode(',', $select);
    }
    if ($expand !== null) {
        $queryParams['$expand'] = implode(',', $expand);
    }
    // ... other parameters
    
    $url = $this->requestUrl;
    if (!empty($queryParams)) {
        $url .= '?' . http_build_query($queryParams);
    }
    
    $response = $this->client->get($url);
    // ...
}
```

## Scalar Parameters

Scalar parameters like `$top`, `$skip`, `$filter`, `$search` are passed directly:

```php
$users = $client->users()->get(
    top: 50,
    skip: 100,
    filter: "startswith(displayName,'A')",
    search: '"displayName:John"'
);
```

## Type Safety

All parameters are properly typed:
- `?array $select` → `string[]|null` in PHPDoc
- `?int $top` → Optional integer
- `?string $filter` → Optional string
- `?bool $count` → Optional boolean
