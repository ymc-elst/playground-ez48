{* list.tpl – Template for Modulview .../flickr/list/ParamOne/ParamTwo
Check if the variable $data_array exists
- yes: show data as list
- no: show message
*}

{if is_set($photos_array)}
    <ul class="flickr_photos">
    {foreach $photos_array as $photo}
        <li><a href="{$photo['url_big']}" target="_blank"><img src="{$photo['url_square']}" title="{$photo['title']}"></a></li>
    {/foreach}
    </ul>
{/if}