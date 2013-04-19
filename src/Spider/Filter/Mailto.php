<?php
class Spider_Filter_Mailto extends Spider_UriFilterInterface
{
    public function accept()
    {
        if (substr($this->current(), 0, 7) == 'mailto:') {
            return false;
        }

        return true;
    }
}
