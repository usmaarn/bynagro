import React from 'react';

export default function ApplicationLogo({ className }) {
    return (
        <div className="">
            <a href="/" className='text-2xl md:text-3xl leading-[15px] md:leading-5'>
                <p className='tracking-widest font-black pt-2'>BYN AGRO</p>
                <p className='text-xs md:text-sm tracking-tighter font-medium'>We Can Change with Agriculture</p>
            </a>
        </div>
    );
}
