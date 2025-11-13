<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Solutions\BackupRestore\ProtectionPolicies;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\ProtectionPolicyBase;

/**
 * Request builder for /solutions/backupRestore/protectionPolicies/{protectionPolicyBase-id}/activate
 */
class ActivateRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke action activate
     * @param ProtectionPolicyBase|\stdClass $body Request body
     * @return ProtectionPolicyBase|\stdClass|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(ProtectionPolicyBase|\stdClass $body): ProtectionPolicyBase|\stdClass|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to ProtectionPolicyBase|\stdClass|null
     */
    private function deserializePost(string $body): ProtectionPolicyBase|\stdClass|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new ProtectionPolicyBase($data);
    }
}
