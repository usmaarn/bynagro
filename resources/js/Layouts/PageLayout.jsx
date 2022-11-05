import PageNavbar from "./Page/Navbar";

export default function PageLayout({ children }) {
    return (
        <>
            <PageNavbar />

            <div className="">
                {children}
            </div>

        </>
    )
}
