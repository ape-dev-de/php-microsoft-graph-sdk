    /**
     * <?= $methodDescription ?>

     *
<?php if ($isCollection): ?>
     * You can use either:
     * 1. Type-safe QueryOptions: get(options: (new <?= $queryOptionsClass ?>())->top(10)->select(['displayName', 'mail']))
     * 2. Array parameters: get(queryParameters: ['$top' => 10, '$select' => 'displayName,mail'])
     *
<?php endif; ?>
     * Supported query parameters:
<?php if ($operations['supportsSelect']): ?>
     * - $select: Select specific properties
<?php endif; ?>
<?php if ($operations['supportsFilter']): ?>
     * - $filter: Filter results
<?php endif; ?>
<?php if ($operations['supportsOrderBy']): ?>
     * - $orderby: Order results
<?php endif; ?>
<?php if ($operations['supportsTop']): ?>
     * - $top: Limit number of results
<?php endif; ?>
<?php if ($operations['supportsSkip']): ?>
     * - $skip: Skip number of results
<?php endif; ?>
<?php if ($operations['supportsExpand']): ?>
     * - $expand: Expand related resources
<?php endif; ?>
<?php if ($operations['supportsSearch']): ?>
     * - $search: Search query
<?php endif; ?>
<?php if ($operations['supportsCount']): ?>
     * - $count: Include count of items
<?php endif; ?>
     *
     * @param <?= $queryOptionsClass ?>|null $options Type-safe query options
     * @param array|null $queryParameters Raw query parameters (alternative to $options)
     * @return <?= $returnType ?>

     */
    public function get(?<?= $queryOptionsClass ?> $options = null, ?array $queryParameters = null): <?= $returnType ?>

    {
        $params = $options ? $options->toArray() : ($queryParameters ?? []);
        $response = $this->client->get($this->getFullPath(), $params);
        return $this->client->deserialize($response, <?= $returnType ?>::class);
    }
