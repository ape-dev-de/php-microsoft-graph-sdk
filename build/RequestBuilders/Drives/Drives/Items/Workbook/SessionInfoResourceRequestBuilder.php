<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Drives\Items\Workbook;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\WorkbookSessionInfo;

/**
 * Request builder for /drives/{drive-id}/items/{driveItem-id}/workbook/sessionInfoResource(key='{key}')
 */
class SessionInfoResourceRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke function sessionInfoResource
     * @return WorkbookSessionInfo|\stdClass
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(): WorkbookSessionInfo|\stdClass
    {
        $response = $this->client->get($this->requestUrl, []);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to WorkbookSessionInfo|\stdClass
     */
    private function deserializeGet(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
        // Single object
        return new WorkbookSessionInfo($data);
    }
}
