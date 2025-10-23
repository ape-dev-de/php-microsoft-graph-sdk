    /**
     * Deserialize response to <?= $returnType ?>

     */
    private function deserialize<?= $methodName ?>(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
<?php if ($isStdClass): ?>
        return (object)$data;
<?php elseif ($isCollection): ?>
        // Collection response
        $items = [];
        foreach ($data['value'] ?? [] as $item) {
            $items[] = <?= $itemDeserializer ?>;
        }
        $collection = new <?= $collectionClass ?>([]);
        $collection->value = $items;
        $collection->odataContext = $data['@odata.context'] ?? null;
        $collection->odataNextLink = $data['@odata.nextLink'] ?? null;
        $collection->odataCount = $data['@odata.count'] ?? null;
        return $collection;
<?php else: ?>
        // Single object
        return <?= $deserializerCode ?>;
<?php endif; ?>
    }
