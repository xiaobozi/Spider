<?php
class Spider_Filter_Empty extends Spider_UriFilterInterface
{
    public function accept()
    {
        $uri = $this->current();

        if (empty($uri)) {
            return false;
        }

        return true;
    }
}
