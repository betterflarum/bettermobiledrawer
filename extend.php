<?php

namespace Yannisme\OXOTheme;

use Flarum\Extend;

return [
    (new Extend\Frontend('forum'))
        
        ->css(__DIR__.'/less/forum.less'),
    
    
];
