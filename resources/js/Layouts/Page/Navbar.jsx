import ApplicationLogo from '@/components/ApplicationLogo';
import {BiMenu, BiSearch} from 'react-icons/bi';
import {HiOutlineLocationMarker} from 'react-icons/hi';

export default function PageNavbar() {

    return (
        <header className="header h-[130px] sticky top-0 z-50 bg-white">

            <section className="top h-[80px] p-5 flex items-center justify-between">

                <div className="flex items-center gap-5">
                    {/* <button className='ml-auto text-2xl md:hidden'>
                        <BiMenu />
                    </button> */}

                    <ApplicationLogo />
                </div>

                <div className="flex items-center gap-5">
                    <BiSearch />
                    <a href='/login'>Login</a>
                </div>
            </section>

            <nav>
                <a href="#">Home</a>
                <a href="#">Products</a>
                <a href="#">Services</a>
                <a href="#">Blogs</a>
                <a href="#">About</a>
                <a href="#">Contact</a>
            </nav>


        </header>
    )
}
