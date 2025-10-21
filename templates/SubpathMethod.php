    /**
     * Get <?= $subresource ?> request builder
     *
     * @return <?= $builderClass ?>

     */
    public function <?= $methodName ?>(): <?= $builderClass ?>

    {
        return new <?= $builderClass ?>($this->client, $this->buildPath('<?= $subresource ?>'));
    }
