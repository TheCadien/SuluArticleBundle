<?php

/*
 * This file is part of Sulu.
 *
 * (c) Sulu GmbH
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Sulu\Bundle\ArticleBundle\Application\Message;

/**
 * @experimental
 */
class RemoveArticleMessage
{
    /**
     * @param array{
     *     uuid?: string
     * } $identifier
     */
    private $identifier;

    /**
     * @param array{
     *     uuid?: string
     * } $identifier
     */
    public function __construct(array $identifier)
    {
        $this->identifier = $identifier;
    }

    /**
     * @param array{
     *     uuid?: string
     * } $identifier
     */
    public function getIdentifier(): array
    {
        return $this->identifier;
    }
}
