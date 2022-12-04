<?php

/*
 * This file is part of Sulu.
 *
 * (c) Sulu GmbH
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Sulu\Bundle\ArticleBundle\Application\Mapper;

use Sulu\Bundle\ArticleBundle\Domain\Model\ArticleInterface;

/**
 * @experimental
 */
interface ArticleMapperInterface
{
    /**
     * @param mixed[] $data
     */
    public function mapArticleData(ArticleInterface $article, array $data): void;
}