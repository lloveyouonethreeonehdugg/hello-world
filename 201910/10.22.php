div id="tour">
<section class="center">
                 <h1>最新产品</h1>
                        <span></span>
                        {hkcms:content action="category" catid="7"  order="listorder asc"}
                            {volist name="data" id="vo"}
                                <a href="{$vo.url}">{$vo.catname}</a>
                            {/volist}
                        {/hkcms:content}
                        <a class="rightMore" href="{:url('content/Index/lists',['catid'=>7])}">>></a>
                    </div>
                    <div class="list">
                        {hkcms:position action="position" posid="2" order="listorder asc"}
                        {volist name="data" id="vo"}
                        <div id="tour">
                            <figure>
                            <a title="PRO-001" href='{$vo.data.url}'>
                                <span class="imgLink-hover"><span class="hover-link"></span></span>
                                <img src="{$vo['data']['thumb']?$vo['data']['thumb']:$config_siteurl.'statics/default/images/dpic.gif'}" alt="{$vo.data.title}" style="width: 300px;" />
                            </a>
                            <a class="productTitle" href="{$vo.data.url}" title="{$vo.data.title}">
                                {$vo.data.title}
                            </a>
                        </div>
                             </figure>
                </div>
                        {/volist}
                        {/hkcms:position}
                    </div>
