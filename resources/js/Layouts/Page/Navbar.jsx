import ApplicationLogo from '@/components/ApplicationLogo';
import {BiMenu} from 'react-icons/bi';
import {HiOutlineLocationMarker} from 'react-icons/hi';

export default function PageNavbar() {

    return (
        <header className="h-[130px]">

            <section className="flex items-center justify-between p-5 h-[80px]">
                <ApplicationLogo />
                <div className="flex gap-2">
                    <div className="p-1 border-2 border-zinc-600 rounded">
                        <HiOutlineLocationMarker className="text-3xl" />
                    </div>
                    <p className='text-sm'>No. M4 Polytechnic Road T/Wada, <br /> Kaduna - Nigeria</p>
                </div>
            </section>

            <section className="flex items-center px-24 bg-black text-white h-[50px]">

                <nav>

                </nav>

                <button className='ml-auto text-2xl md:hidden'>
                    <BiMenu />
                </button>

                <div className=""flex items-center justify-center>

                    <a href={route('login')} className="text-sm">Login</a>
                </div>
            </section>

        </header>
    )
}
