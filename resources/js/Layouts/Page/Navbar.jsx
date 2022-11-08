import ApplicationLogo from '@/components/ApplicationLogo';
import {BiMenu, BiSearch} from 'react-icons/bi';
import {HiOutlineLocationMarker} from 'react-icons/hi';

export default function PageNavbar() {

    return (
        <header className="h-[130px]">

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

            <nav className="h-[50px] border-y flex items-center justify-center gap-5 font-medium">
                <a href="#" className='hover:border-b-2 border-b-black'>Home</a>
                <a href="#">Products</a>
                <a href="#">Blogs</a>
                <a href="#">About</a>
                <a href="#">Contact</a>
            </nav>


        </header>
    )
}
