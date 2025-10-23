# Fast Deserialization Implementation

## Overview
Implemented fast, non-reflection deserialization with per-RequestBuilder deserializer methods.

## Key Features

### 1. **Per-Method Deserializers**
Each HTTP method in a RequestBuilder gets its own private deserializer method:
```php
public function get(): SiteCollection
{
    $response = $this->client->get($url);
    $this->client->checkResponse($response);
    $body = (string)$response->getBody();
    return $this->deserializeGet($body);
}

private function deserializeGet(string $body): SiteCollection
{
    $data = json_decode($body, true);
    // Fast deserialization logic
}
```

### 2. **Fast Object Creation**
Objects are created directly using constructor with spread operator:
```php
return new ContentType(...array_values($data));
```

### 3. **Collection Handling**
Collections are deserialized with fast iteration:
```php
$items = [];
foreach ($data['value'] ?? [] as $item) {
    $items[] = new Site(...array_values($item));
}
return (object)[
    'value' => $items,
    '@odata.context' => $data['@odata.context'] ?? null,
    '@odata.nextLink' => $data['@odata.nextLink'] ?? null,
    '@odata.count' => $data['@odata.count'] ?? null,
];
```

### 4. **Abstract Error Handling**
Error responses are handled centrally in `GraphClient::checkResponse()`:
```php
public function checkResponse(ResponseInterface $response): void
{
    $statusCode = $response->getStatusCode();
    
    if ($statusCode < 200 || $statusCode >= 300) {
        $body = (string) $response->getBody();
        $data = json_decode($body, true);
        $error = (object)($data['error'] ?? ['message' => 'Unknown error', 'code' => 'UnknownError']);
        throw new GraphException($error->message ?? 'API Error', $statusCode, $error);
    }
}
```

### 5. **stdClass Support**
Root namespace stdClass is properly handled:
```php
// Return type
public function post(): ContentType|\stdClass

// Deserializer for pure stdClass
return (object)$data;
```

## Performance Benefits

1. **No Reflection** - Direct object construction
2. **Minimal Overhead** - Single JSON decode per response
3. **Type-Safe** - Each deserializer knows exact return type
4. **Fast Arrays** - Direct array_values spread for constructor
5. **Inline Code** - No method call overhead for deserialization

## Exception Handling

Custom `GraphException` provides:
- HTTP status code
- Error message
- Full error object from API response

```php
try {
    $site = $client->sites()->get();
} catch (GraphException $e) {
    echo "Error {$e->getCode()}: {$e->getMessage()}";
    $errorDetails = $e->getError();
}
```

## Generated Code Structure

Each RequestBuilder contains:
1. Public HTTP methods (get, post, patch, delete)
2. Private deserializer methods (deserializeGet, deserializePost, etc.)
3. Child navigation methods (drives(), sites(), etc.)

No external deserializer classes needed - everything is self-contained for maximum performance.
