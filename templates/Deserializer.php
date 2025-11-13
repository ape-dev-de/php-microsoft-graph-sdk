    /**
     * Deserialize response to <?= $returnType ?><?= $returnType === 'mixed' ? '' : '|null' ?>

     */
    private function deserialize<?= $methodName ?>(string $body): <?= $returnType === 'mixed' ? 'mixed' : $returnType . '|null' ?>
    {
        if (empty($body)) {
            return null;
        }

<?php
// Check if return type is a primitive type (int, float, bool, string)
$firstType = explode('|', $returnType)[0];
$isPrimitive = in_array($firstType, ['int', 'float', 'bool', 'string']);
?>
<?php if ($isPrimitive): ?>
<?php if ($firstType === 'int'): ?>
        return (int)$body;
<?php elseif ($firstType === 'float'): ?>
        return (float)$body;
<?php elseif ($firstType === 'bool'): ?>
        return filter_var($body, FILTER_VALIDATE_BOOLEAN);
<?php else: ?>
        return $body;
<?php endif; ?>
<?php else: ?>

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
        $collection = new <?= $collectionClass ?>($data);
        $collection->value = $items;
        return $collection;
<?php else: ?>
        // Single object
        return <?= $deserializerCode ?>;
<?php endif; ?>
<?php endif; ?>
    }
