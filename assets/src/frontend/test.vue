<template>
    <div>
        <ul id="top-menu">
            <li class="active">
                <a href="#about">About Me</a>
            </li>
            <li>
                <a href="#skills">Skills</a>
            </li>
            <li>
                <a href="#work">Work</a>
            </li>
            <li>
                <a href="#connect">Connect</a>
            </li>
        </ul>

        <div id="about">about</div>

        <div id="skills">skills</div>

        <div id="work">work</div>

        <div id="connect">connect</div>

    </div>
</template>
<script>

    export default {
        name: 'test',
        data() {
            return {
                cards: [],
                modalActive: false,
                attachments: [],
                attachment: {},
                images: [],
                currentComp: 'UploadForm',
                card_title: '',
                card_size: '',
                card_category: '',
                filter_card_category: [],
                card_sizes: [
                    {value: 'square', label: 'Square'},
                    {value: 'a4', label: 'A4'},
                    {value: 'a5', label: 'A5'},
                    {value: 'a6', label: 'A6'},
                ],
                display: 0, // initial items
                pagination: {},
                end: false, // no more resources
                pagination_lock: false,
                per_page: 12,
                current_page: 1,
            }
        },
        computed: {
            assets_url() {
                return Stackonet.assets_url
            },
            card_categories() {
                return DesignerProfile.categories
            },
            card_tags() {
                return DesignerProfile.tags
            },
            user() {
                return DesignerProfile.user
            }
        },
        mounted() {
            this.getCards();
            this.paginateOnScroll();
        },
        methods: {
            paginateOnScroll() {
                window.addEventListener('scroll', () => {
                    let offsetHeight = document.body.scrollTop || document.documentElement.scrollTop,
                        cardContainer = document.querySelector('.all-type-cards'),
                        mailListHeight = cardContainer.offsetHeight + cardContainer.offsetTop;

                    if (
                        !this.pagination_lock &&
                        !this.end &&
                        (window.innerHeight + offsetHeight) >= mailListHeight &&
                        this.cards.length < this.pagination.totalCount &&
                        this.current_page < this.pagination.pageCount
                    ) {
                        this.current_page += 1;
                        this.getCards();
                    }
                });
            },
            getCards() {
                this.pagination_lock = true;
                this.getItems().then(data => {
                    this.cards = this.cards.concat(data.items);
                    this.pagination = data.pagination;
                    this.end = (this.cards.length === data.pagination.totalCount);
                    this.pagination_lock = false;
                });
            },
            getItems() {
                return new Promise(resolve => {
                    axios.get(window.DesignerProfile.restRoot + '/designers/' + this.user.id + '/cards', {
                        params: {
                            per_page: this.per_page,
                            page: this.current_page,
                        }
                    }).then(response => {
                        resolve(response.data.data);
                    }).catch(errors => {
                        console.log(errors);
                    });
                });
            },
            fileUploaded(file, response) {
                console.log(file, response);
            },
            changeComponent(component) {
                // /this.currentComp === component
            },
            closeModal() {
                this.modalActive = false;
            },
            handleClick(value) {
                // Handle click event
            }
        },
    }
</script>

<style lang="scss">
    #top-menu {
        position: fixed;
        z-index: 1;
        background: transparent;
        left: 0;
        right: 0;
        top: 0;
    }

    #top-menu li {
        float: left;
    }

    #top-menu a {
        display: block;
        padding: 5px 25px 7px 25px;
        text-align: center;
        transition: .5s all ease-out;
        border-top: 3px solid white;
        color: #aaa;
        text-decoration: none;
    }

    #top-menu a:hover {
        color: #000;
    }

    #top-menu li.active a {
        border-bottom: 3px solid green;
        color: #333;
    }

    #about {
        background: pink;
        height: 100%;
    }

    #skills {
        background: red;
        height: 100%;
    }

    #work {
        background: blue;
        height: 100%;
    }

    #connect {
        background: black;
        height: 100%;
    }

</style>