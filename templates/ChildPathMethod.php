    /**
     * Navigate to <?= $childPath ?>

     *
     * @return <?= $className ?>

     */
    public function <?= $methodName ?>(): <?= $className ?>

    {
        return new <?= $className ?>($this->client, $this->requestUrl . '/<?= addslashes($childPath) ?>');
    }
