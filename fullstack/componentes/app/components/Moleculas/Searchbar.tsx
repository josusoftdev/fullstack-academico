import Input from "../Atomos/Input"
import Button from "../Atomos/Button"

export default function Searchbar() {
  return (
    <div className="flex gap-2">
      <Input placeholder="Buscar..." />
      <Button className="bg-blue-600 hover:bg-blue-700 text-white">
        Buscar
      </Button>
    </div>
  )
}