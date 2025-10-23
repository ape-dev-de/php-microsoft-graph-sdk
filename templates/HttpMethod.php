    /**
     * <?= $summary ?>

<?php if (!empty($parameters)): ?>
     *
<?php foreach ($parameters as $param): ?>
     * @param <?php 
        if ($param['itemType']) {
            echo 'array<int, ' . $param['itemType'] . '>';
        } else {
            echo $param['type'] === 'array' ? 'array<string, mixed>' : $param['type'];
        }
        echo $param['required'] ? '' : '|null';
     ?> $<?= $param['name'] ?> <?= $param['description'] ?>

<?php endforeach; ?>
<?php endif; ?>
<?php if (in_array(strtoupper($httpMethod), ['POST', 'PUT', 'PATCH'])): ?>
     * @param <?= ($bodyType === 'array') ? 'array<string, mixed>' : $bodyType ?> $body Request body
<?php endif; ?>
     * @return <?= ($returnTypeHint === 'array') ? 'array<string, mixed>' : $returnTypeHint ?>

     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function <?= $methodName ?>(<?= $parameterList ?>): <?= $returnTypeHint ?>

    {
<?php if (!empty($parameters)): ?>
        $queryParams = [];
<?php foreach ($parameters as $param): ?>
        if ($<?= $param['name'] ?> !== null && $<?= $param['name'] ?> !== '') {
<?php if ($param['type'] === 'array' && $param['itemType']): ?>
            $queryParams['<?= $param['originalName'] ?? $param['name'] ?>'] = implode(',', $<?= $param['name'] ?>);
<?php else: ?>
            $queryParams['<?= $param['originalName'] ?? $param['name'] ?>'] = $<?= $param['name'] ?>;
<?php endif; ?>
        }
<?php endforeach; ?>
<?php if (in_array(strtoupper($httpMethod), ['POST', 'PUT', 'PATCH'])): ?>
<?php if ($bodyType === 'array'): ?>
        $response = $this->client-><?= strtolower($httpMethod) ?>($this->requestUrl, $body);
<?php else: ?>
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client-><?= strtolower($httpMethod) ?>($this->requestUrl, $bodyData);
<?php endif; ?>
<?php else: ?>
        $response = $this->client-><?= strtolower($httpMethod) ?>($this->requestUrl, $queryParams);
<?php endif; ?>
<?php else: ?>
<?php if (in_array(strtoupper($httpMethod), ['POST', 'PUT', 'PATCH'])): ?>
<?php if ($bodyType === 'array'): ?>
        $response = $this->client-><?= strtolower($httpMethod) ?>($this->requestUrl, $body);
<?php else: ?>
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client-><?= strtolower($httpMethod) ?>($this->requestUrl, $bodyData);
<?php endif; ?>
<?php elseif (strtoupper($httpMethod) === 'DELETE'): ?>
        $response = $this->client-><?= strtolower($httpMethod) ?>($this->requestUrl, []);
<?php else: ?>
        $response = $this->client-><?= strtolower($httpMethod) ?>($this->requestUrl, []);
<?php endif; ?>
<?php endif; ?>
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserialize<?= ucfirst($methodName) ?>($responseBody);
    }
