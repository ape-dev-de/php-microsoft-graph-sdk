<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\WorkbookSessionInfo;

/**
 * Request builder for /drives/{drive-id}/items/{driveItem-id}/workbook/createSession
 */
class CreateSessionRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke action createSession
     * @param WorkbookSessionInfo|\stdClass $body Request body
     * @return WorkbookSessionInfo|\stdClass|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(WorkbookSessionInfo|\stdClass $body): WorkbookSessionInfo|\stdClass|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to WorkbookSessionInfo|\stdClass|null
     */
    private function deserializePost(string $body): WorkbookSessionInfo|\stdClass|null    {
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
