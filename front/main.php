<style>
    .tag {
        width: 100px;
        padding: 5px 10px;
        border: 1px solid black;
        margin-left: -1px;
        border-radius: 5px 5px 0 0;
        text-align: center;
    }

    .tags {
        display: flex;
        margin-left: 1px;
    }

    article section {
        border: 1px solid black;
        min-height: 480px;
        margin-top: -1px;
        display: none;
    }

    .active {
        border-bottom: 1px solid white;
    }
</style>


<div class="tags">
    <div id="sec01" class="tag active">健康新知  </div>
    <div id="sec02" class="tag">菸害防治</div>
    <div id="sec03" class="tag">癌症防治</div>
    <div id="sec04" class="tag">慢性病防治</div>
</div>
<article>
    <section id="section01">asdsfa</section>
    <section id="section02">adsgafs</section>
    <section id="section03">asfdgaf</section>
    <section id="section04">afsgd</section>
</article>

<script>
    $(".tag").on('click', function() {
        $(".tag").removeClass('active');
        $(this).addClass('active');
        let id=$(this).attr('id').replace("sec","section");

        $("section").hide();
        $("#"+id).show();
    })
</script>