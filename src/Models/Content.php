<?php

namespace Illegal\Linky\Models;

use Illegal\Linky\Abstracts\AbstractModel;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Content extends AbstractModel
{
    /**
     * @var string $tableName The table associated with the model.
     */
    protected $tableName = 'contents';

    /**
     * @return MorphTo
     */
    public function contentable(): MorphTo
    {
        return $this->morphTo();
    }
}
