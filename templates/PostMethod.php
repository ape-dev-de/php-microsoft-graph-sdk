    /**
     * Create a new <?= $modelName ?>

     *
     * @param <?= $modelName ?> $item The item to create
     * @return <?= $modelName ?>

     */
    public function post(<?= $modelName ?> $item): <?= $modelName ?>

    {
        $response = $this->client->post($this->getFullPath(), $item);
        return $this->client->deserialize($response, <?= $modelName ?>::class);
    }
