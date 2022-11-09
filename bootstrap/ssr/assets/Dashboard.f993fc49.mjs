import "react";
import { Head } from "@inertiajs/inertia-react";
import { j as jsxs, a as jsx } from "../ssr.mjs";
import "react-dom/server";
import "process";
import "http";
import "react/jsx-runtime";
function Dashboard(props) {
  return /* @__PURE__ */ jsxs("div", {
    children: [/* @__PURE__ */ jsx(Head, {
      title: "Dashboard"
    }), /* @__PURE__ */ jsx("div", {
      className: "py-12",
      children: /* @__PURE__ */ jsx("div", {
        className: "max-w-7xl mx-auto sm:px-6 lg:px-8",
        children: /* @__PURE__ */ jsx("div", {
          className: "bg-white overflow-hidden shadow-sm sm:rounded-lg",
          children: /* @__PURE__ */ jsx("div", {
            className: "p-6 bg-white border-b border-gray-200",
            children: "You're logged in!"
          })
        })
      })
    })]
  });
}
export {
  Dashboard as default
};
