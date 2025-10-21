    /**
     * Get <?= $modelName ?> item
     *
     * Supported query parameters:
     * - $select: Select specific properties
     * - $expand: Expand related resources
     *
     * @param array|null $queryParameters Query parameters
     * @return <?= $modelName ?>

     */
    public function get(?array $queryParameters = null): <?= $modelName ?>

    {
        $response = $this->client->get($this->getFullPath(), $queryParameters);
        return $this->client->deserialize($response, <?= $modelName ?>::class);
    }
