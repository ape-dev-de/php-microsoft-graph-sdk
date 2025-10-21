    /**
     * Get request builder for specific item by ID
     *
     * @param string $id The item ID
     * @return <?= $itemBuilderClass ?>

     */
    public function byId(string $id): <?= $itemBuilderClass ?>

    {
        return new <?= $itemBuilderClass ?>($this->client, $this->buildPath($id));
    }
