<style>

/* SIDEBAR */
#sidebar {
        position: fixed;
        top: 0;
        left: 0;
        width: 280px;
        height: 100%;
        background: var(--light);
        z-index: 2000;
        font-family: var(--lato);
        transition: .3s ease;
        overflow-x: hidden;
        scrollbar-width: none;
    }

    #sidebar::--webkit-scrollbar {
        display: none;
    }

    #sidebar.hide {
        width: 60px;
    }

    #sidebar .brand {
        font-size: 24px;
        font-weight: 700;
        height: 56px;
        display: flex;
        align-items: center;
        color: var(--blue);
        position: sticky;
        top: 0;
        left: 0;
        background: var(--light);
        z-index: 500;
        padding-bottom: 20px;
        box-sizing: content-box;
    }

    #sidebar .brand .a {
        height: 60px;
        min-width: 60px;
        display: flex;
        justify-content: center;
    }

    #sidebar .side-menu {
        width: 100%;
        margin-top: 48px;
    }

    #sidebar .side-menu li {
        height: 48px;
        background: transparent;
        margin-left: 6px;
        border-radius: 48px 0 0 48px;
        padding: 4px;
    }

    #sidebar .side-menu li.active {
        background: var(--grey);
        position: relative;
    }

    #sidebar .side-menu li.active::before {
        content: '';
        position: absolute;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        top: -40px;
        right: 0;
        box-shadow: 20px 20px 0 var(--grey);
        z-index: -1;
    }

    #sidebar .side-menu li.active::after {
        content: '';
        position: absolute;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        bottom: -40px;
        right: 0;
        box-shadow: 20px -20px 0 var(--grey);
        z-index: -1;
    }

    #sidebar .side-menu li a {
        width: 100%;
        height: 100%;
        background: var(--light);
        display: flex;
        align-items: center;
        border-radius: 48px;
        font-size: 16px;
        color: var(--dark);
        white-space: nowrap;
        overflow-x: hidden;
    }

    #sidebar .side-menu.top li.active a {
        color: var(--blue);
    }

    #sidebar.hide .side-menu li a {
        width: calc(48px - (4px * 2));
        transition: width .3s ease;
    }

    #sidebar .side-menu li a.logout {
        color: var(--red);
    }

    #sidebar .side-menu.top li a:hover {
        color: var(--blue);
    }

    #sidebar .side-menu li a .bx {
        min-width: calc(60px - ((4px + 6px) * 2));
        display: flex;
        justify-content: center;
    }

    /* SIDEBAR */


</style>
