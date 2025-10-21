    /**
     * Update <?= $modelName ?> item
     *
     * @param <?= $modelName ?> $item The item with updated properties
     * @return <?= $modelName ?>

     */
    public function patch(<?= $modelName ?> $item): <?= $modelName ?>

    {
        $response = $this->client->patch($this->getFullPath(), $item);
        return $this->client->deserialize($response, <?= $modelName ?>::class);
    }
