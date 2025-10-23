    /**
     * Get request builder for specific item by ID
     *
     * @param string $<?= $paramName ?? 'id' ?> The item ID
     * @return <?= $itemBuilderClass ?>

     */
    public function byId(string $<?= $paramName ?? 'id' ?>): <?= $itemBuilderClass ?>

    {
        return new <?= $itemBuilderClass ?>($this->client, $this->requestUrl . '/' . $<?= $paramName ?? 'id' ?>);
    }
