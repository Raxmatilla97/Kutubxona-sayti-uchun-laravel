<style>
    /*search box css start here*/
    .search-sec {
        padding: 2rem;
        width: 90%;
        margin: auto;
    }

    .search-slt {
        display: block;
        width: 100%;
        font-size: 0.875rem;
        line-height: 1.5;
        color: #55595c;
        background-color: #fff;
        background-image: none;
        border: 1px solid #ccc;
        height: calc(3rem + 2px) !important;
        border-radius: 0;
    }

    .wrn-btn {
        width: 100%;
        font-size: 16px;
        font-weight: 400;
        text-transform: capitalize;
        height: calc(3rem + 2px) !important;
        border-radius: 0;
    }

    @media (min-width: 992px) {
        .search-sec {
            position: relative;
            top: -230px;
            background: rgba(26, 70, 104, 0.51);
        }
    }

    @media (max-width: 992px) {
        .search-sec {
            background: #1A4668;
        }
    }

</style>
<section class="search-sec">
    <div class="container">
        <form action="#" method="post" novalidate="novalidate">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-5 col-md-3 col-sm-12 p-0">
                            <input type="text" class="form-control search-slt" placeholder="Elektron resurs nomi">
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-12 p-0">
                            <input type="text" class="form-control search-slt" placeholder="Chiqarilgan sana">
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-12 p-0">
                            <select class="form-control search-slt" id="exampleFormControlSelect1">
                                <option>Bo'limi -> (Barcha)</option>
                                <option>Example one</option>
                                <option>Example one</option>
                                <option>Example one</option>
                                <option>Example one</option>
                                <option>Example one</option>
                                <option>Example one</option>
                            </select>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <button type="button" class="btn btn-danger wrn-btn">Qidirish</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
